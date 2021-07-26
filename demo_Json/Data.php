<?php


class DataProduct
{
    public static $path = "product.json";

    public static function loadData()
    {
        $dataJson = file_get_contents(self::$path);
        $json = json_decode($dataJson);
        return self::convertData($json);

    }
    public static function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }
    public static function convertData($data)
    {
        $products = [];
        foreach ($data as $item){
            $product = new Products($item->id, $item->name, $item->price, $item->address, $item->image);
            array_push($products, $product);
        }
        return $products;
    }
    public static function add($product)
    {
        $products = self::loadData();
       array_push($products, $product);
       DataProduct::saveData($products);

    }
    public static function getProductById($id)
    {
        $products = self::loadData();
        foreach ($products as $product){
            if ($product->getId()==$id){
                return $product;
            }
        }
    }
    public static function edit($id, $newProduct)
    {
        $products = self::loadData();
        foreach ($products as $product){
            if ($product->getId()==$id){
                $product->getName($newProduct->getName());
                $product->getPrice($newProduct->getPrice());
                $product->getAddress($newProduct->getAddress());
                $product->getImage($newProduct->getImage());
            }
        }
        self::saveData($products);
    }


}