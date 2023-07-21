<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support){

        $supports = $support->all();
        
        return view('Admin/Supports/index', compact('supports'));
    } 



    public function show(string|int $id){
        
        if (!$support = Support::find($id)){
            return back();
        }
        
        return view('admin/supports/show', compact('support'));
    }



    public function create(){
        return view('admin/supports/create');
    }




    public function store(StoreUpdateSupport $request, Support $support){
        $data = $request->validated();
        $data['status'] = 'a';
    
        // Support::create($data);
        $support->create($data);
       return redirect()->route('supports.index');
    }




   public function edit(Support $support, string|id $id){
            if (!$support = $support::where('id', $id)->first()){
                return back();
            }

            return view('admin/supports.edit', compact('support'));
   }

   public function update(StoreUpdateSupport $request, Support $support, string $id){
        if (!$support = $support::find($id)){
            return back();
        }

        $support->update($request->validated());

        return redirect()->route('supports.index');
   }

   public function destroy(string|int $id){
        if (!$support = Support::find($id)){
            return back();
        }
        $support->delete();

        return redirect()->route('supports.index');
   }
}
