<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateorderdetailsRequest;
use App\Http\Requests\UpdateorderdetailsRequest;
use App\Repositories\orderdetailsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;

class orderdetailsController extends AppBaseController
{
    /** @var  orderdetailsRepository */
    private $orderdetailsRepository;

    public function __construct(orderdetailsRepository $orderdetailsRepo)
    {
        $this->orderdetailsRepository = $orderdetailsRepo;
    }
	
	public function placeorder(Request $request)
	{
		$thisBooking = new \App\Models\Booking();
		$thisBooking->firstname= $request->firstname;
		$thisBooking->surname= $request->surname;
		$thisBooking->bookingdate= $request->bookingdate;
		$thisBooking->bookingtime= $request->bookingtime;
		$thisBooking->productid = $request->productid;
		$thisBooking->fee= $request->price;
		$thisBooking->save();
		$bookingID = $thisBooking->id;
		$productid = $request->productid;
		$thisOrderDetails = new \App\Models\OrderDetails();
		$thisOrderDetails->bookingid = $bookingID;
		$thisOrderDetails->productid = $productid;
		$thisOrderDetails->save();
		
		
		
		
		
		Session::forget('cart');
		Flash::success("See you soon!");
		return redirect(route('products.displaygrid'));
	}
	
	public function checkout()
	{ 
		if (Session::has('cart')) {
			$cart = Session::get('cart');
			$lineitems = array();
			foreach ($cart as $productid => $qty) {
				$lineitem['product'] = \App\Models\Product::find($productid);
				$lineitem['qty'] = $qty;
				$lineitems[] = $lineitem;
			}
			return view('orderdetails.checkout')->with('lineitems', $lineitems);
		}
		else {
			Flash::error("There are no items in your cart");
			return redirect(route('products.displaygrid'));
		}
	}

    /**
     * Display a listing of the orderdetails.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orderdetails = $this->orderdetailsRepository->all();

        return view('orderdetails.index')
            ->with('orderdetails', $orderdetails);
    }

    /**
     * Show the form for creating a new orderdetails.
     *
     * @return Response
     */
    public function create()
    {
        return view('orderdetails.create');
    }

    /**
     * Store a newly created orderdetails in storage.
     *
     * @param CreateorderdetailsRequest $request
     *
     * @return Response
     */
    public function store(CreateorderdetailsRequest $request)
    {
        $input = $request->all();

        $orderdetails = $this->orderdetailsRepository->create($input);

        Flash::success('Orderdetails saved successfully.');

        return redirect(route('orderdetails.index'));
    }

    /**
     * Display the specified orderdetails.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderdetails = $this->orderdetailsRepository->find($id);

        if (empty($orderdetails)) {
            Flash::error('Orderdetails not found');

            return redirect(route('orderdetails.index'));
        }

        return view('orderdetails.show')->with('orderdetails', $orderdetails);
    }

    /**
     * Show the form for editing the specified orderdetails.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderdetails = $this->orderdetailsRepository->find($id);

        if (empty($orderdetails)) {
            Flash::error('Orderdetails not found');

            return redirect(route('orderdetails.index'));
        }

        return view('orderdetails.edit')->with('orderdetails', $orderdetails);
    }

    /**
     * Update the specified orderdetails in storage.
     *
     * @param int $id
     * @param UpdateorderdetailsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateorderdetailsRequest $request)
    {
        $orderdetails = $this->orderdetailsRepository->find($id);

        if (empty($orderdetails)) {
            Flash::error('Orderdetails not found');

            return redirect(route('orderdetails.index'));
        }

        $orderdetails = $this->orderdetailsRepository->update($request->all(), $id);

        Flash::success('Orderdetails updated successfully.');

        return redirect(route('orderdetails.index'));
    }

    /**
     * Remove the specified orderdetails from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderdetails = $this->orderdetailsRepository->find($id);

        if (empty($orderdetails)) {
            Flash::error('Orderdetails not found');

            return redirect(route('orderdetails.index'));
        }

        $this->orderdetailsRepository->delete($id);

        Flash::success('Orderdetails deleted successfully.');

        return redirect(route('orderdetails.index'));
    }
}

