<?php

namespace TwelveCode\MShell;

abstract class ACommand
{
    /**
     * Call argument count
     * @var int
     */

    protected $_argc;

    /**
     * Call argument list
     * @var string[]
     */

    protected $_argv;

    /**
     * Holds the command's result
     * @var null|mixed
     */

    protected $_result = null;

    /**
     * Executes the command
     *
     * Internally the protected process() method is called, together with
     * beforeProcess() and afterProcess()
     *
     * The commend's result can be obtained using getResult()
     *
     * @return ACommand The execution results
     */

    public function execute()
    {
        $this->beforeProcess();

        $this->process();

        $this->afterProcess();

        return $this;
    }

    /**
     * Logic to be executed before the main processing takes place
     *
     * @return mixed
     */

    protected function beforeProcess()
    {
        return;
    }

    /**
     * The main command working unit
     *
     * This method contains all the main command's logic
     * As a result the internal $_result property should be set, so the
     * product can be obtained using getResult() method.
     *
     * @return mixed
     */

    protected function process()
    {
        return;
    }

    /**
     * The logic that should be executed after the main processing takes
     * place
     *
     * @return mixed
     */

    protected function afterProcess()
    {
        return;
    }

    /**
     * Returns help information for the command
     *
     * This method should contain all the help information that the end user
     * would require. It's extreamly powerful in conjunction with the `help`
     * command.
     *
     * @return string
     */

    protected function getHelp()
    {
        return 'No help contents for this command.';
    }

    public function setArgc($argc)
    {
        $this->_argc = $argc;
    }

    public function getArgc()
    {
        return $this->_argc;
    }

    public function setArgv($argv)
    {
        $this->_argv = $argv;
    }

    public function getArgv()
    {
        return $this->_argv;
    }

    /**
     * Returns the command's result (product)
     *
     * @return mixed|null
     */

    public function getResult()
    {
        return $this->_result;
    }

}