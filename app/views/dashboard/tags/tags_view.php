c <div class="container white">
                <h1 class="center-align">
                    Tags
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
                                       Tags
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        furry
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
                                        loli
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
                                        hechi
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
                                agregar un tag
                            </h4>
                            <p>
                                <div class="container">
                                    <!-- form de agregar tipo de usuario-->
                                    <!--tipo de usuario-->
                                    <div class="row">
                                        <input class="validate" id="tag" placeholder="nombre del tag" type="text">
                                        </input>
                                    </div>
                                    <div class="modal-footer">
                                        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#!">
                                            Guardar
                                        </a>
                                    </div>
                                </div>
                            </p>