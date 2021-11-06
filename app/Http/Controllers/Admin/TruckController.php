<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Truck\BulkDestroyTruck;
use App\Http\Requests\Admin\Truck\DestroyTruck;
use App\Http\Requests\Admin\Truck\IndexTruck;
use App\Http\Requests\Admin\Truck\StoreTruck;
use App\Http\Requests\Admin\Truck\UpdateTruck;
use App\Models\Truck;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TruckController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTruck $request
     * @return array|Factory|View
     */
    public function index(IndexTruck $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Truck::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['color', 'id', 'manufacturer', 'no_of_wheels', 'plate_no', 'type'],

            // set columns to searchIn
            ['color', 'id', 'manufacturer', 'plate_no', 'type']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.truck.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.truck.create');

        return view('admin.truck.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTruck $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTruck $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Truck
        $truck = Truck::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/trucks'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/trucks');
    }

    /**
     * Display the specified resource.
     *
     * @param Truck $truck
     * @throws AuthorizationException
     * @return void
     */
    public function show(Truck $truck)
    {
        $this->authorize('admin.truck.show', $truck);

        return view('admin.truck.show', compact('truck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Truck $truck
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Truck $truck)
    {
        $this->authorize('admin.truck.edit', $truck);


        return view('admin.truck.edit', [
            'truck' => $truck,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTruck $request
     * @param Truck $truck
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTruck $request, Truck $truck)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Truck
        $truck->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/trucks'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/trucks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTruck $request
     * @param Truck $truck
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTruck $request, Truck $truck)
    {
        $truck->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTruck $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTruck $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Truck::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
