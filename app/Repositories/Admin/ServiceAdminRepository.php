<?php

namespace App\Repositories\Admin;

use App\Interface\Admin\ServiceAdminInterface;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceAdminRepository implements ServiceAdminInterface
{

    public function all()
    {
        return Service::with('serviceCategory')->all();
    }


    public function paginate(int $num)
    {
        return Service::with('serviceCategory')->paginate($num);
    }


    public function find(int $id)
    {
        return Service::with('serviceCategory')->find($id);
    }

    public function create(array $data, int $categoryId)
    {

        $service = new Service($data);

        $category = ServiceCategory::find($categoryId);

        if (!$category) {
            return false;
        }

        return $category->services()->save($service);
    }


    public function update($model, array $data, int $newCategoryId)
    {

        $categoryNew = ServiceCategory::find($newCategoryId);

        $model->serviceCategory()->associate($categoryNew);
        $model->update($data);

        return $model->save();
    }


    public function delete($model)
    {
        return $model->delete();
    }
}