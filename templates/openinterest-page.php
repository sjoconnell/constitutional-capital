<?php /* Template Name: Openinterest */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="eurodollar-body">

        <nav class="navbar navbar-default navbar-euro-top navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <p class="navbar-eurodollar-title">Open Interest: eurodollar</p>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Date <span class="caret"></span></a>
                        </li>
                        <li id="euro-nodrop">CLEAR FILTER</li>
                        <li id="euro-nodrop">PRINT REPORT</li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="table-responsive table-euro-responsive">
            <table class="table table-bordered table-striped table-openinterest">
                <tr id="table-openinterest-header-row">
                    <th></th>
                    <th>CALL</th>
                    <th></th>
                    <th>STRIKE</th>
                    <th></th>
                    <th>PUT</th>
                    <th></th>
                </tr>
                <tr>
                    <td></td>
                    <td class="callput-cell">DATA</td>
                    <td class="bar-cell"></td>
                    <td class="strike-cell">DATA</td>
                    <td class="bar-cell"></td>
                    <td class="callput-cell">DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                    <td>DATA</td>
                    <td></td>
                </tr>
            </table>
        </div>

    </div>
<?php endwhile; ?>