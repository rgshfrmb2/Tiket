

<!--main content start-->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Management Edit Contact</h6>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <form method="post" action="{{ route('tiket.update', ['id' => $tiket->id]) }}" enctype="multipart/form-data">
                    @csrf
                <table class="table align-items-center mb-0">
              <thead>

              <form>
              <div class="form-group">
               <label for="exampleFormControlInput1">Nama Konser</label>
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="nama_konser">
              </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Tanggal</label>
                  <input class="form-control" type="date" name="tgl" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">HTM</label>
                  <input class="form-control" type="text" name="htm" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nama Pemesan</label>
                  <input class="form-control" type="text" name="nama_pembeli" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Telepon</label>
                  <input class="form-control" type="number" name="tlp" value="" id="example-text-input">
                </div> 
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Email</label>
                  <input class="form-control" type="text" name="email" value="" id="example-text-input">
                </div>
              </form>
</thead>
<tbody>
                    <button type="submit" class="btn btn-primary fs-7">Edit</button>
</tbody>
                </form>
            </div>
        </div>
    </section>
</section>
 