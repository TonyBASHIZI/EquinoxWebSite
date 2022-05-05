 <?php

    $allsms = \App\App::getInstance()->getTable('message')->all();
 
 ?>

 <main class="main--container">
     <section class="page--header">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-6">
                     <h2 class="page--title h5">All messages transaction</h2>
                     <ul class="breadcrumb">
                         <li class="breadcrumb-item"><a href="ecommerce.html">RiverPay</a></li>
                         <li class="breadcrumb-item active"><span>Account messages</span></li>
                     </ul>
                 </div>
                 <div class="col-lg-6">
                     <div class="summary--widget">
                         <div class="summary--item">
                             <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5"
                                 data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>
                             <p class="summary--title">This Month</p>
                             <p class="summary--stats text-green">2,371,527</p>
                         </div>
                         <div class="summary--item">
                             <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5"
                                 data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>
                             <p class="summary--title">Last Month</p>
                             <p class="summary--stats text-orange">2,527,371</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="main--content">

         <div class="panel">
             <div class="records--list" data-title="Transactions Listing">
                 <table id="recordsListView">
                     <thead>
                         <tr>

                             <th>Id</th>
                             <th>Status</th>
                             <th>Created Date</th>
                             <th>Operator</th>
                             <th>Id Transact</th>
                             <th>Numero client</th>
                             <th>Compteur</th>
                             <th>Token</th>
                             <th>Montant</th>

                             <th class="not-sortable">Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach($allsms as $v):?>

                         <tr>

                             <td> <a href="#" class="btn-link"><?=$v->id?></a> </td>
                             <td> <span class="label label-success"><?=$v->statut?></span> </td>
                             <td><?=$v->created_at?></td>
                             <td> <a href="#" class="btn-link"><?=$v->refoperateur?></a> </td>
                             <td> <a href="#" class="btn-link"><?=$v->idTra?></a> </td>
                             <td> <a href="#" class="btn-link"><?=$v->telclient?></a> </td>
                             <td><?=$v->refcompteur?></td>
                             <td><?=$v->nbKwt?></td>
                             <td><?=$v->montant?></td>
                             <td>
                                 <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i
                                             class="fa fa-ellipsis-v"></i></a>
                                     <div class="dropdown-menu">
                                         <a href="index.php?p=smsdetail&id=<?=$v->id?>" class="dropdown-item">View</a>
                                     </div>
                                 </div>
                             </td>
                         </tr>

                         <?php endforeach?>

                     </tbody>
                 </table>
             </div>
         </div>
     </section>
     <footer class="main--footer main--footer-light">
         <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
     </footer>
 </main>