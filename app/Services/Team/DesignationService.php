<?php

namespace App\Services\Team;

use App\Repositories\Team\DesignationRepositories;
use App\Rules\PhoneNumberValidationRules;
use Illuminate\Support\Facades\Validator;

class DesignationService
{

    /**
     * @var $OurTeamRepositories
     */
    private $systemRepositories;

    /**
     * AdminCourseService constructor.
     * @param $OurTeamRepositories $branchRepositories
     */
     
    public function __construct(DesignationRepositories $systemRepositories)
    {
        $this->systemRepositories = $systemRepositories;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getList($request)
    {
        return $this->systemRepositories->getList($request);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getAllList()
    {
        return $this->systemRepositories->getAllList();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function statusUpdate($request, $id)
    {
        return $this->systemRepositories->statusUpdate($request, $id);
    }

    public function statusValidation($request)
    {
         return [
            'name' => 'required',
         ];
    }

    /**
     * @param $request
     * @return array
     */
    public function storeValidation($request)
    {
        return [
            'name' => 'required',
        ];
    }

    /**
     * @param $id
     * @return array
     */
    public function updateValidation($request, $id)
    {
       return [
            'name' => 'required',
        ];
    }

    /**
     * @param $request
     * @return \App\Models\Currency
     */
    public function store($request)
    {
        return $this->systemRepositories->store($request);
    }

    /**
     * @param $request
     * @return \App\Models\Currency
     */
    public function details($id)
    {

        return $this->systemRepositories->details($id);
    }

    /**
     * @param $request
     * @param $id
     */
    public function update($request, $id)
    {
        return $this->systemRepositories->update($request, $id);
    }

    /**
     * @param $request
     * @param $id
     */
    public function destroy($id)
    {
        return $this->systemRepositories->destroy($id);
    }
}
