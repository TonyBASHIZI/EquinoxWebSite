 <?php
   $detailsms = \App\App::getInstance()->getTable('operation')->findById($_GET['id']);
//    var_dump($detailsms);die();
 
 ?>

 <main class="main--container">
     <section class="page--header">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-6">
                     <h2 class="page--title h5">RiverPay View</h2>
                     <ul class="breadcrumb">
                         <li class="breadcrumb-item">
                             <a href="ecommerce.html">RiverPay</a>
                         </li>
                         <li class="breadcrumb-item">
                             <a href="orders.html">transactions</a>
                         </li>
                         <li class="breadcrumb-item active">
                             <span>View</span>
                         </li>
                     </ul>
                 </div>
                 <div class="col-lg-6">
                     <div class="summary--widget">
                         <div class="summary--item">
                             <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5"
                                 data-height="38" data-color="#009378">
                                 2,9,7,9,11,9,7,5,7,7,9,11
                             </p>
                             <p class="summary--title">This Month</p>
                             <p class="summary--stats text-green">2,371,527</p>
                         </div>
                         <div class="summary--item">
                             <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5"
                                 data-height="38" data-color="#e16123">
                                 2,3,7,7,9,11,9,7,9,11,9,7
                             </p>
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
             <div class="records--header">
                 <div class="title fa-fa-h">
                     <h3 class="h3">
                         Transactions views
                         <a href="#" class="btn btn-sm btn-outline-info">transaction Details</a>
                     </h3>
                 </div>
             </div>
         </div>
         <div class="panel">
             <div class="records--body">
                 <div class="title">
                     <h6 class="h6">
                         transact #<?=$detailsms->id?><span class="text-lightergray">
                             - <?=$detailsms->created_at?></span>
                     </h6>
                 </div>
                 <ul class="nav nav-tabs">
                     <li class="nav-item">
                         <a href="#tab01" data-toggle="tab" class="nav-link active">Overview</a>
                     </li>

                 </ul>
                 <div class="tab-content">

                     <div class="tab-pane fade show active" id="tab01">
                         <div class="row">
                             <div class="col-md-6">
                                 <h4 class="subtitle">Order Information</h4>
                                 <table class="table table-simple">
                                     <tbody>
                                         <tr>
                                             <td>ID :</td>
                                             <th>
                                                 <a href="#" class="btn-link"><?=$detailsms->id?></a>
                                             </th>
                                         </tr>
                                         <tr>
                                             <td>Operator :</td>
                                             <th><?=$detailsms->refoperateur?></th>
                                         </tr>
                                         <tr>
                                             <td>Date :</td>
                                             <th><?=$detailsms->created_at?></th>
                                         </tr>
                                         <tr>
                                             <td>Total Amount:</td>
                                             <th>$<?=$detailsms->montant?></th>
                                         </tr>
                                         <tr>
                                             <td>Nombre de Kwh:</td>
                                             <th><?=$detailsms->nbKwt?></th>
                                         </tr>
                                         <tr>
                                             <td>Id Transact :</td>
                                             <th><?=$detailsms->idTra?></th>
                                         </tr>
                                         <tr>
                                             <td>Status :</td>
                                             <th><?=$detailsms->statut?></th>
                                         </tr>
                                         <tr>
                                             <td>Compteur:</td>
                                             <th><?=$detailsms->refcompteur?></th>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <div class="col-md-6">
                                 <h4 class="subtitle">Other Information</h4>
                                 <table class="table table-simple">
                                     <tbody>
                                         <tr>
                                             <td>Tags :</td>
                                             <th><?=$detailsms->tags?></th>
                                         </tr>
                                         <tr>
                                             <td>IsIncomplete :</td>
                                             <th><?=$detailsms->isIncomplete?></th>
                                         </tr>
                                         <tr>
                                             <td>IsUssReply :</td>
                                             <th><?=$detailsms->isUssReply?></th>
                                         </tr>
                                         <tr>
                                             <td>Jeton :</td>
                                             <th><?=$detailsms->jeton?></th>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <footer class="main--footer main--footer-light">
         <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
     </footer>
 </main>