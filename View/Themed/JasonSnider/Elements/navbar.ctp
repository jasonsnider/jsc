<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Jason Snider</a>
        </div>
        <div class="navbar-collapse collapse">
            <!--
            <ul class="nav navbar-nav">
                <li>
                <?php //echo $this->Html->link('Home', '/'); ?></li>
            </ul>
            -->
            <ul class="nav navbar-nav navbar-right">
                <?php if ($this->Session->check('Auth.User')): ?> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link('Log Out', '/users/users/logout'); ?></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link('Login', '/users/users/login'); ?></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>