<?php

namespace Modules\WebSenifTheme\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\SettingPageGeneratorBackend;
use Modules\WebSenifTheme\Entities\WebSenifThemeSettings;
use Modules\WebSenifTheme\Http\Services\ThemeSettingService;

class WebSenifThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {


        $oonfigDetail = config('menus.styles');
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
        $requestData =  $request->all();
        unset($requestData['_token']);

        foreach ($requestData as $key => $requestItem)
        {
            ThemeSettingService::updateSenifThemeSettings($key,$requestItem);
        }
        return back();
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
            ThemeSettingService::getSenifThemeSetting('logo'));

        $settingPageGenerator->addController(
            'hero_title',
            true,
            'Hero Title',
            'You can change hero title',
            'Hero Section',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('hero_title'));

        $settingPageGenerator->addController(
            'hero_content',
            true,
            'Hero Content',
            'You can add hero content on hero page section',
            'Hero Section',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('hero_content'));

        $settingPageGenerator->addController(
            'hero_image',
            true,
            'Hero Image',
            'Hero image left side image',
            'Hero Section',
            'file',
            ThemeSettingService::getSenifThemeSetting('hero_image'));

        $settingPageGenerator->addController(
            'hero_link',
            false,
            'Hero Section Button Link',
            'Hero image left side image',
            'Hero Section',
            'text',
            ThemeSettingService::getSenifThemeSetting('hero_link'));


        $settingPageGenerator->addController(
            'hero_video_link',
            false,
            'Hero video link',
            'Hero video view button link',
            'Hero Section',
            'text',
            ThemeSettingService::getSenifThemeSetting('hero_video_link'));

        $settingPageGenerator->addController(
          'slider_status',
            true,
            'Slider',
            'You can enabled/disabled slider on home page',
            'General',
            'select',
            ThemeSettingService::getSenifThemeSetting('slider_status'),[
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
            ThemeSettingService::getSenifThemeSetting('hero_section'),[
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
            ThemeSettingService::getSenifThemeSetting('section_block1_title'));


        $settingPageGenerator->addController(
            'section_block1_content',
            false,
            'Section 1 Content',
            'Hero image left side image',
            'Service Sections Blocks',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('section_block1_content'));

        $settingPageGenerator->addController(
            'section_block1_image',
            false,
            'Section Block 1 Image',
            'Hero image left side image',
            'Service Sections Blocks',
            'file',
            ThemeSettingService::getSenifThemeSetting('section_block1_image'));

        $settingPageGenerator->addController(
            'section_block1_link',
            false,
            'Section Block 1 Link',
            'Service block link',
            'Service Sections Blocks',
            'text',
            ThemeSettingService::getSenifThemeSetting('section_block1_link'));



        $settingPageGenerator->addController(
            'section_block2_title',
            false,
            'Section 2 Title',
            'Hero image left side image',
            'Service Sections Blocks',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('section_block2_title'));


        $settingPageGenerator->addController(
            'section_block2_content',
            false,
            'Section 2 Content',
            'Hero image left side image',
            'Service Sections Blocks',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('section_block2_content'));

        $settingPageGenerator->addController(
            'section_block2_image',
            false,
            'Section Block 2 Image',
            'Hero image left side image',
            'Service Sections Blocks',
            'file',
            ThemeSettingService::getSenifThemeSetting('section_block2_image'));

        $settingPageGenerator->addController(
            'section_block2_link',
            false,
            'Section Block 2 Link',
            'Service block link',
            'Service Sections Blocks',
            'text',
            ThemeSettingService::getSenifThemeSetting('section_block2_link'));


        $settingPageGenerator->addController(
            'section_block3_title',
            false,
            'Section 3 Title',
            'Hero image left side image',
            'Service Sections Blocks',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('section_block3_title'));


        $settingPageGenerator->addController(
            'section_block3_content',
            false,
            'Section 3 Content',
            'Hero image left side image',
            'Service Sections Blocks',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('section_block3_content'));

        $settingPageGenerator->addController(
            'section_block3_image',
            false,
            'Section Block 3 Image',
            'Hero image left side image',
            'Service Sections Blocks',
            'file',
            ThemeSettingService::getSenifThemeSetting('section_block3_image'));

        $settingPageGenerator->addController(
            'section_block3_link',
            false,
            'Section Block 3 Link',
            'Service block link',
            'Service Sections Blocks',
            'text',
            ThemeSettingService::getSenifThemeSetting('section_block3_link'));

        $settingPageGenerator->addController(
            'feature_section_1_title',
            false,
            'Product feature section 1 Title',
            'Product feature section title',
            'Feature Section 1',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('feature_section_1_title'));

        $settingPageGenerator->addController(
            'feature_section_1_content',
            false,
            'Product feature section 1 content',
            'Product feature section content',
            'Feature Section 1',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('feature_section_1_content'));

        $settingPageGenerator->addController(
            'feature_section_1_image',
            false,
            'Product feature section 1 image',
            'Product feature section image',
            'Feature Section 1',
            'file',
            ThemeSettingService::getSenifThemeSetting('feature_section_1_image'));

        $settingPageGenerator->addController(
            'feature_section_1_status',
            true,
            'Feature Section 1',
            'Enabled/Disabled hero section',
            'Feature Section 1',
            'select',
            ThemeSettingService::getSenifThemeSetting('feature_section_1_status'),[
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
            'feature_section_2_title',
            false,
            'Product feature section 2 Title',
            'Product feature section title',
            'Feature Section 2',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('feature_section_2_title'));

        $settingPageGenerator->addController(
            'feature_section_2_content',
            false,
            'Product feature section 2 content',
            'Product feature section content',
            'Feature Section 2',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('feature_section_2_content'));

        $settingPageGenerator->addController(
            'feature_section_2_image',
            false,
            'Product feature section 2 image',
            'Product feature section image',
            'Feature Section 2',
            'file',
            ThemeSettingService::getSenifThemeSetting('feature_section_2_image'));

        $settingPageGenerator->addController(
            'feature_section_2_status',
            true,
            'Feature Section 2',
            'Enabled/Disabled hero section',
            'Feature Section 2',
            'select',
            ThemeSettingService::getSenifThemeSetting('feature_section_2_status'),[
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
            'feature_section_3_title',
            false,
            'Product feature section 3 Title',
            'Product feature section title',
            'Feature Section 3',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('feature_section_3_title'));

        $settingPageGenerator->addController(
            'feature_section_3_content',
            false,
            'Product feature section 3 content',
            'Product feature section content',
            'Feature Section 3',
            'textarea',
            ThemeSettingService::getSenifThemeSetting('feature_section_3_content'));

        $settingPageGenerator->addController(
            'feature_section_3_image',
            false,
            'Product feature section 3 image',
            'Product feature section image',
            'Feature Section 3',
            'file',
            ThemeSettingService::getSenifThemeSetting('feature_section_3_image'));

        $settingPageGenerator->addController(
            'feature_section_3_status',
            true,
            'Feature Section 3',
            'Enabled/Disabled hero section',
            'Feature Section 3',
            'select',
            ThemeSettingService::getSenifThemeSetting('feature_section_3_status'),[
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


        $settingPageGenerator->renderControllers();
        $category = $settingPageGenerator->getContent();

        return view($settingPageGenerator->renderPage(),[
            'formData' => $category,
            'formURL' => route('store_settings')
        ]);
    }



}
