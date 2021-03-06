<?php

namespace MySociety\TheyWorkForYou\SectionView;

class WmsView extends SectionView {
    protected $major = 4;
    protected $class = 'WMSLIST';

    protected function front_content() {
        return $this->list->display('recent_wms', array('days'=>7, 'num'=>20), 'none');
    }

    protected function getViewUrls() {
        $urls = array();
        $day = new \URL('wms');
        $urls['day'] = $day;
        $urls['wmsday'] = $day;
        return $urls;
    }
}
