<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">KANTIN Wikrama</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">KW</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>              
              <li class="{{ request()->is('dashboard') ? 'active' : '' }}{{ request()->is('dashboard/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
              </li>
              <li class="{{ request()->is('rencana') ? 'active' : '' }}{{ request()->is('rencana/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('rencana.index') }}"><i class="fas fa-cart-plus"></i> <span>Perencanaan</span></a>
              </li>
              <li class="{{ request()->is('pembelian') ? 'active' : '' }}{{ request()->is('pembelian/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pembelian.index') }}"><i class="fas fa-shopping-cart"></i> <span>Pembelian</span></a>
              </li>
              <li class="{{ request()->is('pengeluaran') ? 'active' : '' }}{{ request()->is('pengeluaran/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pengeluaran.index') }}"><i class="fas fa-book"></i> <span>Pengeluaran</span></a></li>              
              <li class="{{ request()->is('laporan') ? 'active' : '' }}{{ request()->is('laporan/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('laporan') }}"><i class="fas fa-print"></i> <span>Laporan</span></a>
              </li>              
            </ul>            
        </aside>
      </div>