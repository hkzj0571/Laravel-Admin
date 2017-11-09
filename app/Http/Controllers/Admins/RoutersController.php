<?php

namespace App\Http\Controllers\Admins;

use App\Exceptions\RouteNotFoundException;
use App\Models\Router;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoutersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routers = Router::tops()->paginate(10);
        return view('admin.routers.index', compact('routers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routers = Router::tops()->get();
        return view('admin.routers.create', compact('routers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Router::create(
                $this->validator('admins.routers.create')
            );
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        } catch (RouteNotFoundException $exception) {
            return failed($exception->getMessage());
        }

        return succeed();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Router $router)
    {
        $childers = Router::tops($router->id)->paginate(10);
        return view()->make('admin.routers.show',compact('childers','router'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Router $router)
    {
        $routers = Router::tops()->get();
        return view('admin.routers.edit', compact('router', 'routers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Router $router)
    {
        try {
            $needs = $this->validator('admins.routers.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        } catch (RouteNotFoundException $exception) {
            return failed($exception->getMessage());
        }

        $router->update($needs);

        return succeed();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Router::destroy($id);
        return succeed();
    }
}
