 <div class="container white">
                <h1 class="center-align">
                    tipo de usuarios
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
                                        nombre tipo usuario
                                    </th>
                                    <th>
                                        permisos
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        administrador
                                    </td>
                                    <td>
                                        todos los permisos
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
                                        empleado
                                    </td>
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
                                        tecnico
                                    </td>
                                    <td>
                                        mantenimiento web
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
                                agregar un tipo de usuario
                            </h4>
                            <p>
                                <div class="container">
                                    <!-- form de agregar tipo de usuario-->
                                    <!--tipo de usuario-->
                                    <div class="row">
                                        <input class="validate" id="tipou" placeholder="tipo de usuario" type="text">
                                        </input>
                                    </div>
                                    <!--categoria de permisos-->
                                    <!-- permiso 1-->
                                     <p>
                                         <input class="filled-in" id="filled-in-box1" type="checkbox">
                                             <label for="filled-in-box1">
                                                permiso 1
                                             </label>
                                         </input>
                                    </p>
                                    <!-- permiso 2-->
                                     <p>
                                         <input class="filled-in" id="filled-in-box2" type="checkbox">
                                             <label for="filled-in-box2">
                                                permiso 2
                                             </label>
                                         </input>
                                    </p>
                                    <!-- permiso 3-->
                                     <p>
                                         <input class="filled-in" id="filled-in-box3" type="checkbox">
                                             <label for="filled-in-box3">
                                                permiso 3
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