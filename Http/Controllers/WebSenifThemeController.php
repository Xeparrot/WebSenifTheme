<?php

namespace Modules\WebSenifTheme\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\SettingPageGeneratorBackend;
class WebSenifThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {


        $oonfigDetail = config('menus.styles');

        dd($oonfigDetail);
        return view('webseniftheme::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {



//        return view('webseniftheme::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('webseniftheme::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('webseniftheme::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }


    public function homepage_settings(Request $request)
    {
        $settingPageGenerator = new SettingPageGeneratorBackend('WebSenif Theme Settings','views','https://hellocom.com');

        $settingPageGenerator->addController(
            'logo',
            true,
            'Logo',
            'Home page theme logo',
            'General',
            'file',
            'hello');

        $settingPageGenerator->addController(
            'hero_title',
            true,
            'Hero Title',
            'You can change hero title',
            'Hero Section',
            'textarea',
            'hello');

        $settingPageGenerator->addController(
            'hero_content',
            true,
            'Hero Content',
            'You can add hero content on hero page section',
            'Hero Section',
            'textarea',
            'hello');

        $settingPageGenerator->addController(
            'hero_image',
            true,
            'Hero Image',
            'Hero image left side image',
            'Hero Section',
            'file',
            '');

        $settingPageGenerator->addController(
            'hero_link',
            false,
            'Hero Section Button Link',
            'Hero image left side image',
            'Hero Section',
            'text',
            '');

        $settingPageGenerator->addController(
          'slider_status',
            true,
            'Slider',
            'You can enabled/disabled slider on home page',
            'General',
            'select',
                null,[
                    [
                        'name' => 'Enabled',
                        'value' => 'Enabled',
                    ],
                    [
                        'name' => 'Disabled',
                        'value' => 'Disabled'
                    ]

            ]
        );

        $settingPageGenerator->addController(
            'hero_section',
            true,
            'Hero Section',
            'Enabled/Disabled hero section',
            'General',
            'select',
            null,[
                [
                    'name' => 'Enabled',
                    'value' => 'Enabled',
                ],
                [
                    'name' => 'Disabled',
                    'value' => 'Disabled'
                ]

            ]
        );

        $settingPageGenerator->addController(
            'section_block1_title',
            false,
            'Section 1 Title',
            'Hero image left side image',
            'Service Sections Blocks',
            'textarea',
            '');

        $settingPageGenerator->renderControllers();
        $category = $settingPageGenerator->getContent();

        return view($settingPageGenerator->renderPage(),[
            'formData' => $category,
            'formURL' => route('store_settings')
        ]);
    }



}
