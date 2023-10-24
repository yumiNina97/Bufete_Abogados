<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users1">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">Nombre</th>
                <th class="min-w-125px">Descripcion</th>
                <th class="min-w-125px">TIPO</th>
                <th class="min-w-125px">ESTADO</th>
                <th class="min-w-125px">CITA</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
            </thead>
        <tbody class="text-gray-600 fw-semibold">
            @forelse ( $tramites as  $t )
                <tr>
                    <td class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <a class="text-gray-800 text-hover-primary mb-1">{{ $t->nombre }}</a>
                        </div>
                    </td>
                    <td>
                    <a class="text-gray-800 text-hover-primary mb-1">{{ $t->descripcion }}</a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $t->tipo }}</a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $t->estado }}</a>
                    </td>
                    <td>