<?php

class OrderItemTableSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = $this->getFaker();

		$orders = Oder::all();
		$products = Product::all()->toArray();

		foreach ($orders as $order){
			$used = [];

			for($i = 0; $i < rand(1,5); $i++){
				$product = $faker->randomElement($products);

				if(!in_array($product["id"], $used)){
					$id = $product["id"];
					$price = $product["price"];
					$quantity = $faker->numberBetween(1,3);

					OrderItem::create([
						"order_id" => $order->id,
						"price" => $price,
						"quantity" => $quantity,
						"product_id" => $id,
					]);

					$used[] = $product["id"];
				}
			}
		}
	}
}