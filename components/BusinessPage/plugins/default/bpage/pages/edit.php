<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   OPENTEKNIK  LLC, COMMERCIAL LICENSE, COMMERCIAL LICENSE https://www.openteknik.com/license/commercial-license-v1
 * @link      https://www.opensource-socialnetwork.org/
 */
?>
<div class="ossn-page-contents">
    	<?php
			echo ossn_plugin_view('widget/view', array(
						'title' => $params['page']->title,
						'contents' => ossn_view_form('bpage/edit', array(
								'action' => ossn_site_url('action/bpage/edit'),
								'params' => $params,
					 	 )),
			));
		?>
</div>