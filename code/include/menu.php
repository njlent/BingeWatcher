<!-- header_start -->

		<div class="headr">
            <a href="#usermenu" class="usermenu_bttn"><img src="images/usermenu.png"/></a>
            <div class="headline red"><?php echo $page ?></div>
            <div class="headmenu">

                <?php if ($page == Feed) { ?><a href="feed.php" class="menuitem active">Feed</a>
                <?php } else { ?><a href="feed.php" class="menuitem">Feed</a><?php } ?>

                <?php if ($page == Music) { ?><a href="music.php" class="menuitem active">Movies</a>
                <?php } else { ?><a href="movies.php" class="menuitem">Movies</a><?php } ?>

                <?php if ($page == Series) { ?><a href="series.php" class="menuitem active">Series</a>
                <?php } else { ?><a href="series.php" class="menuitem">Series</a><?php } ?>

                <?php if ($page == Music) { ?><a href="music.php" class="menuitem active">Music</a>
                <?php } else { ?><a href="music.php" class="menuitem">Music</a><?php } ?>

                <?php if ($page == Request) { ?><a href="request.php" class="menuitem active">Request</a>
                <?php } else { ?><a href="request.php" class="menuitem">Request</a><?php } ?>

                <div class="menuspace">&nbsp;</div>
            </div>
        </div>

<!-- header_end -->