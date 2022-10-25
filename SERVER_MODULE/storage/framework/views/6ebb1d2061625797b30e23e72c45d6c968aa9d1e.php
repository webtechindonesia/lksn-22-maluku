
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Form - Formify</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

   <nav class="navbar navbar-expand-lg sticky-top bg-primary navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="manage-forms.html">Formify</a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" href="#"><?php echo e(Auth::User()->name); ?></a>
         </li>
         <li class="nav-item">
            <form action="/logout" method="POST">
                <?php echo csrf_field(); ?>
                <button class="btn bg-white text-primary ms-4">Logout</button>
            </form>
         </li>
       </ul>
      </div>
    </nav>

    <main>
      <div class="hero py-5 bg-light">
         <div class="container">
            <h2>Create Form</h2>
         </div>
      </div>

      <div class="py-5">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-4">
                  <form action="<?php echo e(url('Form')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                     <!-- s: input -->
                        <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success alert-block">
                                <strong><?php echo e($message); ?></strong>
                            </div>
                        <?php endif; ?>
                     <div class="form-group mb-3">
                        <label for="name" class="mb-1 text-muted">Form Name</label>
                        <input type="text" id="name" name="form_name" class="form-control <?php $__errorArgs = ['form_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autofocus />
                        <?php $__errorArgs = ['form_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     </div>

                     <!-- s: input -->
                     <div class="form-group my-3">
                        <label for="slug" class="mb-1 text-muted">Form Slug</label>
                        <input type="text" id="slug" name="form_slug" class="form-control <?php $__errorArgs = ['form_slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autofocus/>
                        <?php $__errorArgs = ['form_slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     </div>

                     <!-- s: input -->
                     <div class="form-group my-3">
                        <label for="description" class="mb-1 text-muted">Description</label>
                        <textarea id="description" name="description" rows="4" class="form-control"></textarea>
                     </div>

                     <!-- s: input -->
                     <div class="form-group my-3">
                        <label for="allowed-domains" class="mb-1 text-muted">Allowed Domains</label>
                        <input type="text" id="allowed-domains" name="allowed_domains" class="form-control" />
                        <div class="form-text">Separate domains using comma ",". Ignore for public access.</div>
                     </div>

                     <!-- s: input -->
                     <div class="form-group">
                        <select name="limit_one_response" id="" class="form-control">
                            <option value="False">False</option>
                            <option value="True">True</option>
                        </select>
                     </div>
                        
                     <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                     </div>
                  </form>

               </div>
            </div>
         </div>
      </div>
    </main>

    <div class="container">
       <div class="card">
           <div class="card-header">
                <div class="table-responsive-md">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Form Name</th>
                            <th scope="col">Form Slug</th>
                            <th scope="col">description</th>
                        </tr>
                        </thead>
                        <?php
                            $no = 1;
                        ?>
                        <tbody>
                            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($no++); ?></th>
                            <td><?php echo e($item->form_name); ?></td>
                            <td><?php echo e($item->form_slug); ?></td>
                            <td><?php echo e($item->Description); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
           </div>
       </div>
    </div>


    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\SERVER_SIDE\resources\views/dashboard.blade.php ENDPATH**/ ?>