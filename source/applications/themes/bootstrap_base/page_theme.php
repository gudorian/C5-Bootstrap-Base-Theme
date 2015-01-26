<?php
namespace Application\Theme\BootstrapBase;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function registerAssets() {
        // Javascript
        $this->providesAsset('javascript', 'bootstrap/*');
        $this->requireAsset('javascript', 'jquery');

        // CSS
        $this->providesAsset('css', 'bootstrap/*');
        $this->requireAsset('css', 'blocks/form');
        $this->requireAsset('css', 'core/frontend/*');
    }

    /*
     * Adds block classes
     */
    public function getThemeBlockClasses() {
        return array(
            'autonav' => array(
                'nav-navbar'
            ),
            'image' => array(
                'img-rounded'
            ),
            'content' => array(
                'hidden'
            )
        );
    }

    /*
     * Adds area classes
     */
    public function getThemeAreaClasses() {
        return array(
            'Content' => array('class-name')
        );
    }

    /*
     * Adds css classes to wysiwyg editor
     */
    public function getThemeEditorClasses() {
        return array(
            array('title' => t('Orange Button'), 'menuClass' => '', 'spanClass' => 'btn btn-orange'),
            array('title' => t('Green Button'), 'menuClass' => '', 'spanClass' => 'btn btn-green')
        );
    }

    /*
     * To use this setting you need to add
     * putenv('APP_ENV=production'); or putenv('APP_ENV=development');
     * Before array() in applications/config/app.php
     */
    public function isDevEnvironment() {
        if (getenv('APP_ENV') == 'development') {
            return true;
        }
        return false;
    }

}
