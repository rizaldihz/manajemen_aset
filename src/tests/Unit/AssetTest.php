<?php

namespace Tests\Unit;

use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use App\Interfaces\Repositories\IAssetRepository;
use App\Services\AssetService;
use Illuminate\Support\Collection;
use App\Models\JenisAsset;
use App\Models\Asset;

class AssetTest extends MockeryTestCase
{
    public function setUp():void
    {
        $this->repository = Mockery::mock(IAssetRepository::class);
        $this->service = new AssetService($this->repository);
    }
    public function test_asset_data()
    {
        $jenisAsset = new JenisAsset;
        $jenisAsset->nama = 'Laptop';
        $c = collect();
        $c->add(new Asset([
            'kode_aset' => 'L001',
            'nama' => 'Laptop Vivobook 2',
            'lokasi' => 'Lumajang',
            'stok' => 1,
            'jenis_asset_id' => $jenisAsset->id,
            'status' => 0,
            'foto' => 'None'
        ]));
        $c->add(new Asset([
            'kode_aset' => 'L002',
            'nama' => 'Laptop Vivobook 2',
            'lokasi' => 'Lumajang',
            'stok' => 1,
            'jenis_asset_id' => $jenisAsset->id,
            'status' => 0,
            'foto' => 'None'
        ]));
        $c->add(new Asset([
            'kode_aset' => 'L003',
            'nama' => 'Laptop Vivobook 2',
            'lokasi' => 'Lumajang',
            'stok' => 1,
            'jenis_asset_id' => $jenisAsset->id,
            'status' => 0,
            'foto' => 'None'
        ]));
        $this->repository->shouldReceive('get')
            ->andReturn($c) 
            ->once();
        $response = $this->service->getAll();
        $this->assertTrue(is_a($response, 'Illuminate\Support\Collection'));
        $this->assertEquals(3, $response->count());
    }
}
