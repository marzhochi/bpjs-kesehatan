<?php

namespace Marzhochi\Bpjs\Vclaim;

use Marzhochi\Bpjs\BpjsIntegration;
use GuzzleHttp\Exception\ClientException;

class Monitoring extends BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function dataKunjungan($tglSep, $jnsPelayanan)
    {
        $response = $this->get('Monitoring/Kunjungan/Tanggal/'.$tglSep.'/JnsPelayanan/'.$jnsPelayanan);
        return json_decode($response, true);
    }
    
    public function dataKlaim($tglPulang, $jnsPelayanan, $statusKlaim)
    {
        $response = $this->get('Monitoring/Klaim/Tanggal/'.$tglPulang.'/JnsPelayanan/'.$jnsPelayanan.'/Status/'.$statusKlaim);
        return json_decode($response, true);
    }

    public function historyPelayanan($noKartu, $tglMulai, $tglAkhir)
    {
        $response = $this->get('monitoring/HistoriPelayanan/NoKartu/'.$noKartu.'/tglMulai/'.$tglMulai.'/tglAkhir/'.$tglAkhir);
        return json_decode($response, true);
    }

    public function dataKlaimJasaRaharja($tglMulai, $tglAkhir)
    {
        $response = $this->get('monitoring/JasaRaharja/tglMulai/'.$tglMulai.'/tglAkhir/'.$tglAkhir);
        return json_decode($response, true);
    }
}