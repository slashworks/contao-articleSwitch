<?php
 /**
 *
 *          _           _                       _
 *         | |         | |                     | |
 *      ___| | __ _ ___| |____      _____  _ __| | _____
 *     / __| |/ _` / __| '_ \ \ /\ / / _ \| '__| |/ / __|
 *     \__ \ | (_| \__ \ | | \ V  V / (_) | |  |   <\__ \
 *     |___/_|\__,_|___/_| |_|\_/\_/ \___/|_|  |_|\_\___/
 *                                        web development
 *
 *     http://www.slash-works.de </> hallo@slash-works.de
 *
 *
 * @author      jrgregory
 * @copyright   jrgregory@slashworks
 * @since       10.03.15 | KW 11 10:41
 * @package     articleSwitch
 *
 */

namespace slashworks;

class DcaArticleSwitcherClass extends \Backend {

    public function initArticleSwitcher($dca)
    {

        // get current article id
        $iId = \Input::get('id');

        // check if id is not empty
        if(!$iId)
            return;

        // add css file to head
        $GLOBALS['TL_CSS'][] = 'system/modules/articleSwitch/assets/css/style.css';

        // Get current primary key
        $oCurArticle = \ArticleModel::findByPk($iId);

        // get articles from db
        $oData = ArticleSwitchModel::getArticlesByPid(intval($oCurArticle->pid));

        // create data array
        $aData = array();

        // fill up data array
        while($oData->next())
        {

            $aData['contao/main.php?do=article&table=tl_content&id=' . $oData->id .'&amp;rt='. REQUEST_TOKEN .'&amp;ref=' . TL_REFERER_ID] = $oData->title;

        }

        // generate template object
        $oTpl = new \BackendTemplate('be_articleSwitch');

        // set items to template object
        $oTpl->articles = $aData;
        $oTpl->label = $GLOBALS['TL_LANG']['Ext']['articleSwitch']['defaultText'];

        // generate the template as moo template
        $GLOBALS['TL_MOOTOOLS'][] = $oTpl->parse();

    }

} 