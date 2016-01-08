<?php /* Template Name: Eurodollar */ ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="eurodollar-body">

        <nav class="navbar navbar-default navbar-euro-top navbar-fixed-top">
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

        <div class="table-responsive table-euro-responsive">
            <table class="table table-bordered table-striped table-euro">
                <tr id="table-euro-header-row">
                    <th><?php the_field('eurodollar-table-header-col-one');?></th>
                    <th><?php the_field('eurodollar-table-header-col-two');?></th>
                    <th><?php the_field('eurodollar-table-header-col-three');?></th>
                    <th><?php the_field('eurodollar-table-header-col-four');?></th>
                    <th><?php the_field('eurodollar-table-header-col-five');?></th>
                    <th><?php the_field('eurodollar-table-header-col-six');?></th>
                    <th><?php the_field('eurodollar-table-header-col-seven');?></th>
                    <th><?php the_field('eurodollar-table-header-col-eight');?></th>
                    <th><?php the_field('eurodollar-table-header-col-nine');?></th>
                    <th><?php the_field('eurodollar-table-header-col-ten');?></th>
                    <th><?php the_field('eurodollar-table-header-col-eleven');?></th>
                    <th><?php the_field('eurodollar-table-header-col-twelve');?></th>
                </tr>
                <?php while( have_rows('eurodollar-table-data') ): the_row(); ?>
                    <tr>
                        <td class="empty-cell"><?php the_sub_field('col-one');?></td>
                        <td class="house-cell"><?php the_sub_field('col-two');?></td>
                        <td class="standard-cell"><?php the_sub_field('col-three');?></td>
                        <td class="standard-cell"><?php the_sub_field('col-four');?></td>
                        <td class="standard-cell"><?php the_sub_field('col-five');?></td>
                        <td class="small-cell"><?php the_sub_field('col-six');?></td>
                        <td class="small-cell"><?php the_sub_field('col-seven');?></td>
                        <td class="standard-cell"><?php the_sub_field('col-eight');?></td>
                        <td class="spread-cell"><?php the_sub_field('col-nine');?></td>
                        <td class="comments-cell"><?php the_sub_field('col-ten');?></td>
                        <td class="time-cell"><?php the_sub_field('col-eleven');?></td>
                        <td class="empty-cell"><?php the_sub_field('col-twelve');?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

    </div>

<?php endwhile; ?>