<?php echo $cabecera ?>

<div class="card-header d-flex justify-content-between">
    <div class="header-title">
    <h4 class="card-title" _msthash="2343094" _msttexthash="60021">Lista de Ventas</h4>
    </div>
</div>


<div class="card">
    <div class="card-body">
           <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <li class="nav-item">
                   <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Listar</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Nuevo</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Actualizar</a>
               </li>
           </ul>
           <div class="tab-content" id="pills-tabContent-2">
               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                   <table class="table">
                       <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                       </tr>
                       <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                       </tr>
                       <tr>
                           <th scope="row">3</th>
                           <td>Larry</td>
                           <td>the Bird</td>
                           <td>@twitter</td>
                       </tr>
                       </tbody>
                   </table>
               </div><!--fin de listar-->
               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                   AGREGAR NUEVA VENTA
                   <br>
                    <div class="form-group">
                        <label>Codigo Usuario</label>
                        <select class="form-control mb-3">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Codigo Helado</label>
                        <select class="form-control mb-3">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputdatetime">Fecha</label>
                        <input type="datetime-local" class="form-control" id="exampleInputdatetime" value="2019-12-19T13:45:00">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber3">Cantidad</label>
                        <input type="number" class="form-control" id="exampleInputNumber3" value="123456">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText1">Precio S/.</label>
                        <input type="text" class="form-control" id="exampleInputText1" value="Mark Tech"
                            placeholder="Enter Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn bg-danger">Cancel</button>
               </div><!--fin de nuevo-->
               <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div id="table" class="table-editable">
                        <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm bg-primary"><i
                            class="ri-add-fill"><span class="pl-1">Nuevo</span></i>
                        </button>
                        </span>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Company Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Sort</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td contenteditable="true">Gio Metric</td>
                                    <td contenteditable="true">25</td>
                                    <td contenteditable="true">Deepends</td>
                                    <td contenteditable="true">Spain</td>
                                    <td contenteditable="true">Madrid</td>
                                    <td>
                                    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
                                    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
                                    </td>
                                    <td>
                                    <span class="table-remove"><button type="button"
                                        class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</button></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td contenteditable="true">Manny Petty</td>
                                    <td contenteditable="true">45</td>
                                    <td contenteditable="true">Insectus</td>
                                    <td contenteditable="true">France</td>
                                    <td contenteditable="true">San Francisco</td>
                                    <td>
                                    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
                                    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
                                    </td>
                                    <td>
                                    <span class="table-remove"><button type="button"
                                        class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</button></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td contenteditable="true">Lucy Tania</td>
                                    <td contenteditable="true">26</td>
                                    <td contenteditable="true">Isotronic</td>
                                    <td contenteditable="true">Germany</td>
                                    <td contenteditable="true">Frankfurt am Main</td>
                                    <td>
                                    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
                                    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
                                    </td>
                                    <td>
                                    <span class="table-remove"><button type="button"
                                        class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</button></span>
                                    </td>
                                </tr>
                                <tr class="hide">
                                    <td contenteditable="true">Anna Mull</td>
                                    <td contenteditable="true">35</td>
                                    <td contenteditable="true">Portica</td>
                                    <td contenteditable="true">USA</td>
                                    <td contenteditable="true">Oregon</td>
                                    <td>
                                    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
                                    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
                                    </td>
                                    <td>
                                    <span class="table-remove"><button type="button"
                                        class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</button></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
               </div><!--fin de actualizar-->
           </div>
       </div>
</div>


<?php echo $pie ?>