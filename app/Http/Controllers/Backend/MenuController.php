<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuFormRequest;
use App\Http\Requests\SubMenuFormRequest;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    //

    //------------ menu and sub menu crud starts---------------//
    public function editMenuPage($id){
        
        $menu=Menu::find($id);
        return view('admin.pages.menu.edit-menu',compact('menu'));  
    }
    
    public function updateMenuPage(MenuFormRequest $request, $id){ 
     Menu::find($id)->update([
            'name' => $request->name,
            'url' => $request->url,
            'slug' => $request->slug,
        ]);
        return back()->with("success", "congo!the menu has been updated");
    }

    public function  deleteMenuPage($id){
        $menu=Menu::find($id)->delete();
        return back();   
    }

    public function submitMenu(MenuFormRequest $request){
        $submitMenu = Menu::create([
            'name' => $request->name,
            'url' => $request->url,
            'slug' => $request->slug,
        ]);
        return back()->with("success", "congo!the menu has been added");
    }

    public function addMenu(){
        $allMenu=Menu::all();
        return view('admin.pages.menu.add-menu',compact('allMenu'));
        
    }

    public function  addSubMenu(){
        $menus=Menu::all();
        $allSubMenu=Submenu::all();
        return view('admin.pages.menu.add-submenu',compact('allSubMenu','menus'));
    }

    public function submitSubMenu(SubMenuFormRequest $request){
      
        $submitMenu = Submenu::create([
            'menu_id'=>$request->sub_menu_id,
            'sub_menu' => $request->sub_menu,
            'sub_menu_ulr' => $request->sub_menu_ulr,
            'sub_menu_slug' => $request->sub_menu_slug,
        ]);
        return back()->with("success", "congo!the menu has been added");
    }

     //------------ menu and sub menu crud starts---------------//
     public function editSubMenuPage($id){
        $menus=Menu::all();
        $submenu=Submenu::find($id);
        return view('admin.pages.menu.edit-submenu',compact('submenu','menus'));  
    }
    
    public function updateSubMenuPage(SubMenuFormRequest $request, $id){
        dd($request); 
       
     Submenu::find($id)->update([
        'menu_id'=>$request->sub_menu_id,
        'sub_menu' => $request->sub_menu,
        'sub_menu_ulr' => $request->sub_menu_ulr,
        'sub_menu_slug' => $request->sub_menu_slug,
        ]);
        return back()->with("success", "congo!the menu has been updated");
    }

    //------------ menu and sub menu crud ends---------------//
}
