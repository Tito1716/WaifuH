 <div class="container white">
                <h1 class="center-align">
                    <!-- indicador de donde se encuentra el usuario-->
                    Control de usuarios
                </h1>
                <div class="container">
                    <nav>
                        <div class="nav-wrapper white">
                            <!-- barra de busqueda-->
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
                        <!-- se comienza a crear la tabla que contendra la informacion-->
                        <table class="bordered">
                            <thead>
                                <tr>
                                    <th>
                                        usuario
                                    </th>
                                    <th>
                                        clave
                                    </th>
                                    <th>
                                        edad
                                    </th>
                                    <th>
                                        correo
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        ashiok
                                    </td>
                                    <td>
                                        andres aguilar
                                    </td>
                                    <td>
                                        18
                                    </td>
                                    <td>
                                        ashiok@gmail.com
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
                                        markiuts
                                    </td>
                                    <td>
                                        Marcos castillo
                                    </td>
                                    <td>
                                        18
                                    </td>
                                    <td>
                                        marckelvin@gmail.com
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
                                        edge503
                                    </td>
                                    <td>
                                        rodrigo guevara
                                    </td>
                                    <td>
                                        18
                                    </td>
                                    <td>
                                        rodrigo@gmail.com
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
                    </div>
                    <div class="container">
                        <!-- se agrega el boton con el que se controlara el crud-->
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
                            agregar un usuario
                        </h4>
                        <p>
                            <div class="container">
                                <!-- form de agregar usuarios-->
                                <div class="col s12 m8 offset-m2 l6 offset-l3">
                                    <!-- imagen circular y div que contiene al form-->
                                    <div class="card-panel grey lighten-5 z-depth-1">
                                        <div class="row valign-wrapper">
                                            <div class="col s2">
                                                <img alt="" class="circle responsive-img" src="../web/img/noimg.jpg">
                                                </img>
                                            </div>
                                            <div class="col s10">
                                                <span class="black-text">
                                                    <div class="file-field input-field">
                                                        <!-- boton para explorar archivos-->
                                                        <div class="btn">
                                                            <span>
                                                                elegir una imagen
                                                            </span>
                                                            <input type="file">
                                                            </input>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text">
                                                            </input>
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- nombre-->
                                <div class="row">
                                    <input class="validate" id="first_name" placeholder="nombre" type="text">
                                    </input>
                                </div>
                                <!-- clave-->
                                <div class="row">
                                    <input class="validate" id="clave" placeholder="clave" type="password">
                                    </input>
                                </div>
                                <!-- correo-->
                                <div class="row">
                                    <input class="validate" id="correo" placeholder="correo" type="email">
                                    </input>
                                </div>
                                <!--nacimiento-->
                                <div class="row">
                                    <input class="datepicker" id="nacimiento" placeholder="fecha de nacimiento" type="text">
                                    </input>
                                </div>
                                <!-- permisos-->
                                <div class="input-field col s12">
                                    <select>
                                        <option disabled="" selected="" value="">
                                            seleccione el tipo de usuario
                                        </option>
                                        <option value="1">
                                            admin
                                        </option>
                                        <option value="2">
                                            empleado
                                        </option>
                                        <option value="3">
                                            tecnico
                                        </option>
                                    </select>
                                </div>
                                <!-- direccion-->
                                <div class="row">
                                    <input class="validate" id="direccion" placeholder="direccion" type="text">
                                    </input>
                                </div>
                            </div>
                        </p>
                    </div>
                    <!--fin de la modal de agregar inicio modal de perfil-->
                    <div class="modal-footer">
                        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#!">
                            Guardar
                        </a>
                    </div>
                </div>