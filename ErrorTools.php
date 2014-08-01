<?php

/*
 * The MIT License
 *
 * Copyright 2014 Ethan Ruffing.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Ruffing;

/**
 * This function is a wrapper to allow errors passed through {@link
 * http://php.net/manual/en/errorfunc.configuration.php#ini.error-reporting
 * Error Reporting} to be thrown as exceptions.
 *
 * Adapted from the PHP Manual page on the
 * {@link http://php.net/manual/en/class.errorexception.php ErrorException}
 * class.
 *
 * @author Ethan Ruffing
 * @since 2014-08-01
 * @copyright (c) 2014, Ethan Ruffing
 * @license http://opensource.org/licenses/MIT The MIT License
 *
 * @param int $errno The error number (exception severity)
 * @param string $errstr The error string (exception message)
 * @param int $errfile The error file (exception file)
 * @param int $errline The error line number (exception line number)
 * @throws ErrorException
 */
function exception_error_handler($errno, $errstr, $errfile, $errline)
{
	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}
