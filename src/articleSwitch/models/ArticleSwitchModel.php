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
 * @since       11.03.15 | KW 11 01:11
 * @package     articleSwitch
 *
 */

namespace slashworks;

class ArticleSwitchModel extends \ArticleModel {

    static function getArticlesByPid($iId)
    {

        if(!is_integer($iId))
            return;

        return static::findBy('pid', $iId);

    }

} 