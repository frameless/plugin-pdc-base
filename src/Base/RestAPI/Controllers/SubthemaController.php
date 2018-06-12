<?php

namespace OWC\PDC\Base\RestAPI\Controllers;

use OWC\PDC\Base\Models\Subthema;
use WP_Error;
use WP_REST_Request;

class SubthemaController extends BaseController
{

    /**
     * Get a list of all subthemas.
     */
    public function getSubthemas(WP_REST_Request $request)
    {
        $items = (new Subthema)
            ->query(apply_filters('owc/pdc/rest-api/subthemas/query', $this->getPaginatorParams($request)))
            ->hide([ 'items' ]);

        $data = $items->all();
        $query = $items->getQuery();

        return $this->addPaginator($data, $query);
    }

    /**
     * Get an individual subthema.
     *
     * @param $request $request
     *
     * @return array|WP_Error
     */
    public function getSubthema(WP_REST_Request $request)
    {
        $id = (int) $request->get_param('id');

        $thema = (new Subthema)
            ->query(apply_filters('owc/pdc/rest-api/subthemas/query/single', []))
            ->find($id);

        if ( ! $thema) {
            return new WP_Error('no_item_found', sprintf('Subthema with ID "%d" not found', $id), [
                'status' => 404
            ]);
        }

        return $thema;
    }

}