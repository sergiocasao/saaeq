<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

use App\Setting;

class ClientMainMenuComposer
{
	public function compose(View $view)
	{
		$menu_items = [

		];

		$view->with('menu_items',$menu_items);
	}
}
