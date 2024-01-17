    <div class="container">
        <h3 class="text-center text-secondary mb-10">Daftar Barang</h3>
        <div class="row">
            <div class="col-lg-8">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1;
                        foreach ($tabel_record as $row) { ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row->kode_barang ?></td>
                                <td><?php echo $row->nama_barang ?></td>
                                <td><?php echo $row->merk ?></td>
                                <?php
                                if ($row->status == 1) {
                                    echo "<td style='color:green;'>Tersedia</td>";
                                } else {
                                    echo "<td style='color:red;'>Terpinjam</td>";
                                }
                                ?>
                                <?php $i++; ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-lg-4">

                <div class="calen">
                    <div id="v-cal">
                        <div class="vcal-header">
                            <button class="vcal-btn" data-calendar-toggle="previous">
                                <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                </svg>
                            </button>

                            <div class="vcal-header__label" data-calendar-label="month">
                                Maret 2017
                            </div>

                            <button class="vcal-btn" data-calendar-toggle="next">
                                <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="vcal-week">
                            <span>Sen</span>
                            <span>Sel</span>
                            <span>Rab</span>
                            <span>Kam</span>
                            <span>Jum</span>
                            <span>Sab</span>
                            <span>Min</span>
                        </div>
                        <div class="vcal-body" data-calendar-area="month"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>