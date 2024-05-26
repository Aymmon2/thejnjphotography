<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Customer Data</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="mb-3">
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-back">Back</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('customerData')); ?>" id="journAdd" method="get">
                            <?php echo csrf_field(); ?>
                            <div class="row input-daterange">
                                <?php if($startDate && $endDate): ?>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control startDate" placeholder="Start"
                                            name="date_start"id="startdate" value="<?php echo e($startDate); ?>" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control endDate" placeholder="End"
                                            name="date_end" value="<?php echo e($endDate); ?>" />
                                    </div>
                                <?php else: ?>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control startDate" placeholder="Start"
                                            name="date_start"id="startdate"
                                            value="<?php echo e((new DateTime())->modify('first day of this month')->format('Y-m-d')); ?>" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control endDate" placeholder="End"
                                            name="date_end"
                                            value="<?php echo e((new DateTime())->modify('last day of this month')->format('Y-m-d')); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-4">

                                    <button type="submit" name="filter" id="filter"
                                        class="btn btn-primary">Filter</button>
                                    <button type="button" name="refreshs" id="refreshs"
                                        class="btn btn-default"><a
                                            href="<?php echo e(route('customerData')); ?>"><i
                                                class="fa-solid fa-rotate-right">
                                                Reset</i></a></button>
                                                <a href="<?php echo e(route('customerExport', ['date_start' => $startDate, 'date_end' => $endDate])); ?>"
                                                    class="btn btn-info" style="float: right;" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Download this Report to Excel">
                                                    <i class="fas fa-download"></i> Export Excel
                                                 </a>
                                </div>
                            </div>
                        </form>

                        <h4 class="card-title fw-bold text-center mb-7 mt-4">CUSTOMER DATA REPORT</h4>

                        <?php if($startDate && $endDate): ?>
                            <p class="alert alert-success text-center"><b><?php echo e(date('F d, Y', strtotime($startDate))); ?> to <?php echo e(date('F d, Y', strtotime($endDate))); ?></b></p>
                        <?php endif; ?>

                        <div class="input-group mb-3" style="width: 110px;">
                            <input type="text" class="form-control" placeholder="Search..." id="searchInput" >
                        </div>

                        <div class="table-responsive">
                            <table class="table custom-table">
                                <thead>
                                    <tr>
                                        <th>Date Created</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Date & Time of Events</th>
                                        <th>Occasion</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->created_at->format('F d, Y')); ?></td>
                                            <td><?php echo e($item->name); ?></td>
                                            <td><?php echo e($item->email); ?></td>
                                            <td><?php echo e($item->contact_number); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($item['date'] . ' ' . $item['time'])->format('d F Y - g:i a')); ?></td>
                                            <td><?php echo e($item->occasion); ?></td>
                                            <td class="message-cell" data-message="<?php echo e($item->message); ?>"></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>

<style>
    .custom-table th,
    .custom-table td {
        border: 1px solid #dee2e6;
        text-align: center;
        overflow-x: auto;
        max-width: 100%;
        white-space: nowrap;
    }
    .btn-back {
    color: black;
    background-color: #fff;
    border-color: #fff;
    }

    .btn-back:hover {
        color: white;
        background-color: #000; 
        border-color: #fff;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var messageCells = document.querySelectorAll('.message-cell');
        var maxTextLength = 20;

        messageCells.forEach(function (cell) {
            var message = cell.dataset.message;

            if (message.length > maxTextLength) {
                var truncatedText = message.substring(0, maxTextLength) + '...';
                cell.textContent = truncatedText;
                cell.setAttribute('title', message);
            } else {
                cell.textContent = message;
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('searchInput').addEventListener('input', function () {
            var input, filter, table, tr, td, i, j, txtValue;
            input = this.value.toUpperCase();
            table = document.querySelector(".custom-table");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                var found = false;
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(input) > -1) {
                            found = true;
                            break;
                        }
                    }
                }
                tr[i].style.display = found ? "" : "none";
            }
        });
    });
</script>
</body>
</html>
<?php /**PATH C:\Users\Aymmon\Downloads\Compressed\jnjphotography-main\resources\views\customerdata.blade.php ENDPATH**/ ?>