<?php
namespace CJump\Http\Controller;

class CrudController extends Controller
{

    public function rotaraiz()
    {
        $this->response->send(['requisicao_original' => $this->request->all(), 'msg' => 'fluxo GET']);
    }

    public function rotapost()
    {
        $this->response->send(['requisicao_original' => $this->request->all(), 'msg' => 'fluxo POST']);
    }
}