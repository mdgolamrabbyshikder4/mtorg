            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">@yield('create_title')</div>
                  </div>
                  <form action="{{$route}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">

                        <div class="form-group">
                          <label for="name">Name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Enter Name"
                          />
                        </div>

                        <div class="form-group">
                          <label for="title">Title</label>
                          <input
                            type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            placeholder="Enter Title"
                          />
                        </div>

                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea
                            class="form-control"
                            id="description"
                            name="description"
                            placeholder="Enter Description"
                          ></textarea>
                        </div>

                        <div class="form-group">
                          <label for="image">Image</label>
                          <input
                            type="file"
                            class="form-control"
                            id="image"
                            name="image"
                          />
                        </div>
                    </div>
                  <div class="card-action">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>