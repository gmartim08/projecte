<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Factures;

class FacturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Factures::create(array(
            'customer_name'  			=> '3', //podria ser nom en ves de id.
            'customer_identity'    		=> '4798224567-S',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '3218',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '4',
            'customer_identity'    		=> '43545675642-L',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '2548',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '5',
            'customer_identity'    		=> '876643242-K',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '6514',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '6',
            'customer_identity'    		=> '1231243556-T',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '5871',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '3',
            'customer_identity'    		=> '5435342321-S',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '3123',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '5',
            'customer_identity'    		=> '6798224567-A',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '432962',
            'number' 					=> '228312312371',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '4',
            'customer_identity'    		=> '645432212-A',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '213312',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '8',
            'customer_identity'    		=> '346344233-Z',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '1231234',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '9',
            'customer_identity'    		=> '321322342-X',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '3123421',
            'number' 					=> '789563',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '3',
            'customer_identity'    		=> '23453224-D',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '3213124',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '4',
            'customer_identity'    		=> '31256742-Q',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '4332122',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '4',
            'customer_identity'    		=> '123123421-I',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '1312342321',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '5',
            'customer_identity'    		=> '549423423-O',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '13123423',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
        Factures::create(array(
            'customer_name'  			=> '7',
            'customer_identity'    		=> '897656423-C',
            'customer_identity_type'	=> 'NIF',
            'serial' 					=> '43962',
            'number' 					=> '43242321',
            'date' 						=> '18/05/2018',
            'total_net_amount' 			=> '8000',
            'total_amount' 				=> '10000',
            'included_vat' 				=> '21',
            'observations' 				=> 'La Factura ha sigut realitzada correctament',
            'lines' 					=> '4',
            'send' 						=> '1'
        ));
    }
}