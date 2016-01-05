<?php /* Template Name: Eurodollar */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="eurodollar-body">

        <nav class="navbar navbar-default navbar-euro-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <p class="navbar-eurodollar-title">Eurodollar: days trading</p>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Date <span class="caret"></span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>Advanced Search </a>
                        </li>
                        <li id="euro-nodrop">CLEAR FILTER</li>
                        <li id="euro-nodrop">PRINT REPORT</li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-euro">
                <tr id="table-euro-header-row">
                    <th></th>
                    <th>HOUSE</th>
                    <th>BUY/SELL</th>
                    <th>QUANTITY</th>
                    <th>CODES</th>
                    <th>STRIKE</th>
                    <th>C/P</th>
                    <th>PREMIUM</th>
                    <th>SPREAD</th>
                    <th>COMMENTS</th>
                    <th>TIME STAMP</th>
                    <th></th>
                </tr>
                <tr>
                    <td class="empty-cell"></td>
                    <td class="house-cell">DATA</td>
                    <td class="standard-cell">DATA</td>
                    <td class="standard-cell">DATA</td>
                    <td class="standard-cell">DATA</td>
                    <td class="small-cell">DATA</td>
                    <td class="small-cell">DATA</td>
                    <td class="standard-cell">DATA</td>
                    <td class="spread-cell">DATA</td>
                    <td class="comments-cell">DATA</td>
                    <td class="time-cell">DATA</td>
                    <td class="empty-cell"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td>DATA</td>
                    <td></td>
                </tr>
            </table>
        </div>

    </div>

<?php endwhile; ?>