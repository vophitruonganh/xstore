<?php

namespace Xstore\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Xstore\Models\TaUser;
use Xstore\Models\TaUserMetum;
use Xstore\Models\TaUserPassworkReset;
use Xstore\Models\TaAttachment;
use Xstore\Models\TaAttachmentUser;
use Xstore\Models\TaCategory;
use Xstore\Models\TaCategoryMetum;
use Xstore\Models\TaCustomer;
use Xstore\Models\TaCustomerMetum;
use Xstore\Models\TaCustommerOrder;
use Xstore\Models\TaDistrict;
use Xstore\Models\TaOrder;
use Xstore\Models\TaOrderProduct;
use Xstore\Models\TaPermission;
use Xstore\Models\TaPost;
use Xstore\Models\TaProduct;
use Xstore\Models\TaProductMetum;
use Xstore\Models\TaProvince;
use Xstore\Models\TaRoll;
use Xstore\Models\TaShipping;
use Xstore\Models\TaSite;
use Xstore\Models\TaTheme;
use Xstore\Models\TaTrademark;
use Xstore\Models\TaTrademarkMetum;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	/**
	 * Class Constructor
	 * @param    $model
	 */
	public function __construct()
	{

	}

    /**
     * Gets the value of model.
     *
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the value of model.
     *
     * @param mixed $model the model
     *
     * @return self
     */
    protected function setModel($model)
    {
        $this->model = $model;

        return $this;
    }
}
