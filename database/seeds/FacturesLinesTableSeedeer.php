<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Factures_lines;

class FacturesLinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Factures_lines::create(array(
            'facturaID'                 => '2341',            
            'description'               => 'Shapphire Radeon r9',
            'units'                     => '1',
            'unit_price'                => '300',
            'total_line'                => '300',
            'taxa'                      => '21',
            'price_cost'                => '320',
            'linea'                     => '1',          
        ));
        Factures_lines::create(array(            
            'facturaID'                 => '2568', 
            'description'               => 'Radeon r9 280X',
            'units'                     => '1',
            'unit_price'                => '300',
            'total_line'                => '300',
            'taxa'                      => '21',
            'price_cost'                => '320',
            'linea'                     => '1'            
        ));
        Factures_lines::create(array(            
            'facturaID'                 => '5847',
            'description'               => 'HDD SDD 250GB',
            'units'                     => '2',
            'unit_price'                => '50',
            'total_line'                => '100',
            'taxa'                      => '21',
            'price_cost'                => '120',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(            
            'facturaID'                 => '5847',
            'description'               => 'HDD SDD 150GB',
            'units'                     => '1',
            'unit_price'                => '30',
            'total_line'                => '30',
            'taxa'                      => '21',
            'price_cost'                => '50',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(            
            'facturaID'                 => '8985',
            'description'               => 'Intell I9',
            'units'                     => '1',
            'unit_price'                => '1000',
            'total_line'                => '1000',
            'taxa'                      => '21',
            'price_cost'                => '1320',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(
            'facturaID'                 => '4785',
            'description'               => 'AMD FX 8350',
            'units'                     => '3',
            'unit_price'                => '80',
            'total_line'                => '240',
            'taxa'                      => '21',
            'price_cost'                => '320',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(
            'facturaID'                 => '5248',
            'description'               => 'Silla Gaming',
            'units'                     => '1',
            'unit_price'                => '200',
            'total_line'                => '200',
            'taxa'                      => '21',
            'price_cost'                => '220',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(
            'facturaID'                 => '7834',
            'description'               => 'Aplicació app engine',
            'units'                     => '1',
            'unit_price'                => '1500',
            'total_line'                => '1500',
            'taxa'                      => '21',
            'price_cost'                => '1820',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(
            'facturaID'                 => '5871',
            'description'               => 'Placa base extreme 970',
            'units'                     => '1',
            'unit_price'                => '80',
            'total_line'                => '80',
            'taxa'                      => '21',
            'price_cost'                => '120',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(
            'facturaID'                 => '6514',
            'description'               => 'Switch',
            'units'                     => '1',
            'unit_price'                => '50',
            'total_line'                => '50',
            'taxa'                      => '21',
            'price_cost'                => '120',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(
            'facturaID'                 => '2548',
            'description'               => 'Lampara',
            'units'                     => '1',
            'unit_price'                => '97.88',
            'total_line'                => '97.88',
            'taxa'                      => '21',
            'price_cost'                => '120',
            'linea'                     => '1'
        ));        
        Factures_lines::create(array(
            'facturaID'                 => '3218',
            'description'               => 'Ram DDR4 16GBx2',
            'units'                     => '1',
            'unit_price'                => '180',
            'total_line'                => '180',
            'taxa'                      => '21',
            'price_cost'                => '220',
            'linea'                     => '1'
        ));
        Factures_lines::create(array(            
            'facturaID'                 => '2568', 
            'description'               => 'Ratoli',
            'units'                     => '1',
            'unit_price'                => '20',
            'total_line'                => '20',
            'taxa'                      => '21',
            'price_cost'                => '25',
            'linea'                     => '1'            
        ));
    }
}
