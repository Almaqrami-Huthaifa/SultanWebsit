
@extends('admin.layout.master')
@section('content')
    <div style="text-align: center">
        <h2 class="small-title">All materials</h2>
    </div>

    <section class="scroll-section" id="hoverableRows">
        <div class="card mb-5">
            <div class="card-body">
                <div>
                    <a class="btn btn-primary col-md-2" href={{route("createmat")}}>
                        New material
                    </a>
                </div>
                <br />
                <input class="form-control SearchInput" type="text" placeholder="Search Here"><br />
                <table class="table table-bordered table-hover table-sm ListTable">
                    <thead class="datagridheader">
                        <tr>
                            <th scope="col">cat.No</th>
                            <th scope="col">category Name</th>
                            
                            <th scope="col">category Image</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>


                        
                        @foreach ($allmaterials as $rowNo => $material)
                            <tr class="tr">
                                
                                <th scope="row">{{ $rowNo + 1 }}</th>
                                <td>{{$material->name}}</td>
                                
                                <td>
                                    <div class="how-itemcart1">
                                    <img src="{{ $material->image_path }}"  alt="IMG"/>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                        href="{{ route('EditMat', ['id' => $material->id]) }}" title="Edit">

                                        <i data-acorn-size="15">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-icon-start btn-outline-danger ms-1"
                                        href="{{ route('DeleteMat', ['id' => $material->id]) }}" title="Delete">
                                        <i data-acorn-size="15">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>
                                        </i>
                                    </a>

                                    <a class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                        href="{{ route("DetailMat", ['id' => $material->id]) }}" title="Details">
                                        <i data-acorn-size="15">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16"fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                <path
                                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                            </svg>
                                        </i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection










