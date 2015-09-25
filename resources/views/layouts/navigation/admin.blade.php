  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Administração</a>
            </div>
            <!-- Top Menu Items -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
             <ul class="nav navbar-nav side-nav">
                 <li>
                    <a href="{{ route('admin.products.index') }}"><i class="fa fa-fw fa-dashboard"></i> Produtos</a>
                 </li>
                 <li>
                    <a href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-dashboard"></i> Categorias</a>
                 </li>
                 <li>
                    <a href="{{ route('admin.users.index') }}"><i class="fa fa-fw fa-dashboard"></i> Usuários</a>
                 </li>
             </ul>
         </div>
 </nav>