<form>
<div class="form-group">
  <label for="nome">Nome: </label>
  <input type="text" class="form-control" id="nome" aria-describedby="nameHelp"
   placeholder="Nome" validate value="<?=$cadastro->__get('nome'); ?>">
</div>
<div class="form-group">
  <label for="idade">Idade: </label>
  <input type="text" class="form-control" name="idade"
  placeholder="Idade" validate value="<?=$cadastro->__get('idade'); ?>">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>


