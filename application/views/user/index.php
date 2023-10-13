<!-- Begin Page Content -->
<div class="container-fluid p-5 ">
    <div class="row ">
        <div class="col-lg-3 mt-5">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-lg-12 ">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " class="card-img" alt="..." >
                    </div>
                    <div class="col-lg-12">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['name']; ?> </h5>
                            <p class="card-text"><?= $user['email'] . ' - ' . $user['no_handphone']; ?></p>
                            <p class="card-text"><?= $user['address']; ?></p>
                            <a href="<?= base_url('user/editprofile'); ?>" class="badge badge-danger">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- End of Main Content -->