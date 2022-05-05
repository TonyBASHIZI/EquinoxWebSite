  <?php
   
    $allPaidFail = \App\App::getInstance()->getTable('operation')->findPaidFail();
    $PaidFail = \App\App::getInstance()->getTable('operation')->PaidFail();
    $allPaid = \App\App::getInstance()->getTable('operation')->findPaid('finished');
    $allTransct = \App\App::getInstance()->getTable('operation')->countAll();
    $allpaidToday = \App\App::getInstance()->getTable('operation')->paidToday();
    $account = \App\App::getInstance()->getTable('operation')->SoldeToday();
    // var_dump($allPaidFail);die();

  ?>
  <main class="main--container">
      <section class="page--header">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-6">
                      <h2 class="page--title h5">Dashboard</h2>
                      <ul class="breadcrumb">
                          <li class="breadcrumb-item active"><span>Dashboard</span></li>
                      </ul>
                  </div>
                  <div class="col-lg-6">
                      <div class="summary--widget">
                          <div class="summary--item">
                              <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5"
                                  data-height="38" data-color="#009378">

                                  15,9,7,9,11,9,7,5,7,7,9,11
                              </p>
                              <p class="summary--title">Transactions</p>
                              <p class="summary--stats text-green"><?php foreach($allTransct as $v):?>
                                  <?=$v->nb?>
                                  <?php endforeach?>
                              </p>
                          </div>
                          <div class="summary--item">
                              <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5"
                                  data-height="38" data-color="#e16123">
                                  2,3,7,7,9,11,9,7,9,11,9,7
                              </p>
                              <p class="summary--title">Transact done</p>
                              <p class="summary--stats text-orange"><?php foreach($allPaid as $v):?>
                                  <?=$v?>
                                  <?php endforeach?></p>

                          </div>
                          <div class="summary--item">
                              <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5"
                                  data-height="34" data-color="#e16123">
                                  <?php foreach($PaidFail as $v):?>
                                  <?=$v->montant?>,
                                  <?php endforeach?></p>

                              </p>
                              <p class="summary--title">failed</p>
                              <p class="summary--stats text-dark"><?php foreach($allPaidFail as $v):?>
                                  <?=$v->total?>
                                  <?php endforeach?></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="main--content">
          <div class="row gutter-20">
              <div class="col-md-4">
                  <div class="panel">
                      <div class="miniStats--panel">
                          <div class="miniStats--header bg-darker">
                              <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4"
                                  data-height="30" data-color="#2bb3c0">
                                  5,6,9,4,9,5,3,5,9,15,3,2,2,3,9,11,9,7,20,9,7,6
                              </p>
                              <p class="miniStats--label text-white bg-blue">
                                  <i class="fa fa-level-up-alt"></i> <span>10%</span>
                              </p>
                          </div>
                          <div class="miniStats--body">
                              <i class="miniStats--icon fa fa-user text-blue"></i>
                              <p class="miniStats--caption text-blue">Monthly</p>
                              <h3 class="miniStats--title h4">Paid today</h3>
                              <p class="miniStats--num text-blue"><?php foreach($allpaidToday as $v):?>
                                  <?=$v->total?>.0 USD
                                  <?php endforeach?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="panel">
                      <div class="miniStats--panel">
                          <div class="miniStats--header bg-darker">
                              <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4"
                                  data-height="30" data-color="#e16123">
                                  2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3
                              </p>
                              <p class="miniStats--label text-white bg-orange">
                                  <i class="fa fa-level-down-alt"></i> <span>10%</span>
                              </p>
                          </div>
                          <div class="miniStats--body">
                              <i class="miniStats--icon fa fa-ticket-alt text-orange"></i>
                              <p class="miniStats--caption text-orange">Monthly</p>
                              <h3 class="miniStats--title h4">TOTAL ACCOUNT</h3>
                              <p class="miniStats--num text-orange"><?php foreach($account as $v):?>
                                  <?=$v->total?>.0 USD
                                  <?php endforeach?></p>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="panel">
                      <div class="miniStats--panel">
                          <div class="miniStats--header bg-darker">
                              <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4"
                                  data-height="30" data-color="#009378">
                                  2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3
                              </p>
                              <p class="miniStats--label text-white bg-green">
                                  <i class="fa fa-level-up-alt"></i> <span>10%</span>
                              </p>
                          </div>
                          <div class="miniStats--body">
                              <i class="miniStats--icon fa fa-rocket text-green"></i>
                              <p class="miniStats--caption text-green">Monthly</p>
                              <h3 class="miniStats--title h4">Transactions on</h3>
                              <p class="miniStats--num text-green"><?php foreach($allTransct as $v):?>
                                  <?=$v->nb?>
                                  <?php endforeach?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-8 col-md-6">
                  <div class="panel">
                      <div class="panel-heading">
                          <h3 class="panel-title">Yearly Earning Graph Overview</h3>
                          <div class="dropdown">
                              <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-ellipsis-v"></i>
                              </button>
                              <ul class="dropdown-menu">
                                  <li>
                                      <a href="#"><i class="fa fa-sync"></i>Update Data</a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="fa fa-cogs"></i>Settings</a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="fa fa-times"></i>Remove Panel</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="panel-chart">
                          <div id="morrisAreaChart01" class="chart--body area--chart style--1"></div>
                          <div class="chart--stats style--1">
                              <ul class="nav">
                                  <li data-overlay="1 orange">
                                      <p class="amount">$10,320,340</p>
                                      <p>
                                          <span class="label">Order</span>
                                          <span class="text-red"><i class="fa fa-long-arrow-alt-down"></i>2.25%</span>
                                      </p>
                                  </li>
                                  <li data-overlay="1 red">
                                      <p class="amount">$235,090</p>
                                      <p>
                                          <span class="label">Shipment</span>
                                          <span class="text-green"><i class="fa fa-long-arrow-alt-up"></i>2.25%</span>
                                      </p>
                                  </li>
                                  <li data-overlay="1 blue">
                                      <p class="amount">$134,900</p>
                                      <p>
                                          <span class="label">Tax</span>
                                          <span class="text-red"><i class="fa fa-long-arrow-alt-down"></i>2.25%</span>
                                      </p>
                                  </li>
                                  <li data-overlay="1 green">
                                      <p class="amount">$1,340</p>
                                      <p>
                                          <span class="label">Revenue</span>
                                          <span class="text-green"><i class="fa fa-long-arrow-alt-up"></i>2.25%</span>
                                      </p>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section>
      <footer class="main--footer main--footer-light">
          <p>Copyright &copy; <a href="#">RiverPay</a>. All Rights Reserved.</p>
      </footer>
  </main>