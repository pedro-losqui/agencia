<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastro de usuário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form autocomplete="off">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nome Completo</label>
                                <input type="text" name="name" class="form-control" placeholder="John">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">E-mail</label>
                                <input type="text" name="email" class="form-control" placeholder="john@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Senha</label>
                                <input type="text" class="form-control" id="field-4" placeholder="******">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Confirmar senha</label>
                                <input type="text" class="form-control" id="field-5" placeholder="******">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <p class="text-muted mt-3 mb-2">Status</p>
                                    <div class="radio radio-info form-check-inline">
                                        <input type="radio" id="inlineRadio1" value="ativo" name="radioInline" checked>
                                        <label for="inlineRadio1"> Ativo </label>
                                    </div>
                                    <div class="radio form-check-inline">
                                        <input type="radio" id="inlineRadio2" value="inativo" name="radioInline">
                                        <label for="inlineRadio2"> Inativo </label>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Salvar</button>
            </div>
        </div>
    </div>
</div>
