<div class="col-md-12">
    <h3> 
        Daftar BMI Pasien 
    </h3>
    <table class="table">
        <thead>
            <tr>
        <th>#</th><th>tanggal periksa</th><th>Kode</th><th>Nama</th><th>Gender</th><th>berat</th><th>tinggi</th><th>BMI</th><th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $nomor=1;
            foreach($bmi_model as $bmipasien){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$bmipasien->tanggal_periksa?></td>
                <td><?=$bmipasien->kode?></td>
                <td><?=$bmipasien->nama?></td>
                <td><?=$bmipasien->gender?></td>
                <td><?=$bmipasien->berat?></td>
                <td><?=$bmipasien->tinggi?></td>
                <td><?=$bmipasien->BMI?></td>
                <td><?=$bmipasien->Status?></td>
            </tr>
        <?php
            $nomor++;
            }
        ?>
        </tbody>
    </table>
</div>