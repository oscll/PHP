<div id="contenido">
    <h1>Informacion del Usuario</h1>
    <p>
    <table border='2'>
        <tr>
            <td>imdbID: </td>
            <td>
                <?php
                    echo $user['imdbID'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Titulo: </td>
            <td>
                <?php
                    echo $user['titulo'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Director: </td>
            <td>
                <?php
                    echo $user['director'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Actors: </td>
            <td>
                <?php
                    echo $user['actors'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Fecha de lanzamiento: </td>
            <td>
                <?php
                    echo $user['fecha_lanzamiento'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Plot: </td>
            <td>
                <?php
                    echo $user['plot'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Email: </td>
            <td>
                <?php
                    echo $user['email'];
                ?>
            </td>

        </tr>

        <tr>
            <td>Website: </td>
            <td>
                <?php
                    echo $user['website'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Aficion: </td>
            <td>
                <?php
                    echo $user['aficion'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Idioma: </td>
            <td>
                <?php
                    echo $user['idioma'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Type: </td>
            <td>
                <?php
                    echo $user['type'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>
