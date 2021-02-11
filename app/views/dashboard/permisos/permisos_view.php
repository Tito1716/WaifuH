 <div class="container white">
                <h1 class="center-align">
                    permisos de usuario
                </h1>
                <div class="container">
                    <nav>
                        <div class="nav-wrapper white">
                            <form>
                                <div class="input-field">
                                    <input id="search" required="" type="search">
                                        <label class="label-icon" for="search">
                                            <i class="material-icons pink-text">
                                                search
                                            </i>
                                        </label>
                                        <i class="material-icons pink-text">
                                            close
                                        </i>
                                    </input>
                                </div>
                            </form>
                        </div>
                    </nav>
                    <div class="container">
                        <table class="bordered">
                            <thead>
                                <tr>
                                    <th>
                                       permisos
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        control de usuarios
                                    </td>
                                    <td>
                                        <i class="material-icons">
                                            edit
                                        </i>
                                    </td>
                                    <td>
                                        <i class="material-icons">
                                            delete
                                        </i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        control de productos
                                    </td>
                                    <td>
                                        <i class="material-icons">
                                            edit
                                        </i>
                                    </td>
                                    <td>
                                        <i class="material-icons">
                                            delete
                                        </i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        control de ventas
                                    </td>
                                    <td>
                                        <i class="material-icons">
                                            edit
                                        </i>
                                    </td>
                                    <td>
                                        <i class="material-icons">
                                            delete
                                        </i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="container">
                            <div class="fixed-action-btn horizontal click-to-toggle">
                                <a class="btn-floating btn-large red btn btn-floating pulse modal-trigger" href="#modal2">
                                    <i class="material-icons">
                                        add_box
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                         <!-- inicio de la modal para agregar-->
                    <div class="modal" id="modal2">
                        <div class="modal-content">
                            <h4>
                                agregar un permiso
                            </h4>
                            <p>
                                <div class="container">
                                    <!-- form de agregar tipo de usuario-->
                                    <!--tipo de usuario-->
                                    <div class="row">
                                        <input class="validate" id="tipou" placeholder="nombre del permiso" type="text">
                                        </input>
                                    </div>
                                    <!--categoria de permisos-->
                                    <!-- permiso 1-->
                                     <p>
                                         <input class="filled-in" id="filled-in-box1" type="checkbox">
                                             <label for="filled-in-box1">
                                                editar los usuarios
                                             </label>
                                         </input>
                                    </p>
                                    <!-- permiso 2-->
                                     <p>
                                         <input class="filled-in" id="filled-in-box2" type="checkbox">
                                             <label for="filled-in-box2">
                                                editar los productos
                                             </label>
                                         </input>
                                    </p>
                                    <!-- permiso 3-->
                                     <p>
                                         <input class="filled-in" id="filled-in-box3" type="checkbox">
                                             <label for="filled-in-box3">
                                                eliminar productos
                                             </label>
                                         </input>
                                    </p>
                                    <div class="modal-footer">
                                        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#!">
                                            Guardar
                                        </a>
                                    </div>
                                </div>
                            </p>