/*
 * tkWin32Dll.c --
 *
 *	This file contains a stub dll entry point.
 *
 * Copyright (c) 1995 Sun Microsystems, Inc.
 *
 * See the file "license.terms" for information on usage and redistribution
 * of this file, and for a DISCLAIMER OF ALL WARRANTIES.
 *
 * SCCS: @(#) tkWin32Dll.c 1.9 96/08/06 15:59:08
 */

#include "pTk/tkPort.h"

#ifdef WIN32

#include "pTk/tkWinInt.h"

static HINSTANCE tclInstance;	/* Global library instance handle. */

/*
 * The following declaration is for the VC++ DLL entry point.
 */

BOOL APIENTRY		DllMain _ANSI_ARGS_((HINSTANCE hInst,
			    DWORD reason, LPVOID reserved));

/*
 *----------------------------------------------------------------------
 *
 * DllEntryPoint --
 *
 *	This wrapper function is used by Borland to invoke the
 *	initialization code for Tk.  It simply calls the DllMain
 *	routine.
 *
 * Results:
 *	See DllMain.
 *
 * Side effects:
 *	See DllMain.
 *
 *----------------------------------------------------------------------
 */

BOOL APIENTRY
DllEntryPoint(hInst, reason, reserved)
    HINSTANCE hInst;		/* Library instance handle. */
    DWORD reason;		/* Reason this function is being called. */
    LPVOID reserved;		/* Not used. */
{
    return DllMain(hInst, reason, reserved);
}

/*
 *----------------------------------------------------------------------
 *
 * DllMain --
 *
 *	DLL entry point.
 *
 * Results:
 *	TRUE on sucess, FALSE on failure.
 *
 * Side effects:
 *	None.
 *
 *----------------------------------------------------------------------
 */

BOOL APIENTRY
DllMain(hInstance, reason, reserved)
    HINSTANCE hInstance;
    DWORD reason;
    LPVOID reserved;
{
    /*
     * If we are attaching to the DLL from a new process, tell Tk about
     * the hInstance to use. If we are detaching then clean up any
     * data structures related to this DLL.
     */

    if (reason == DLL_PROCESS_ATTACH) {
	tclInstance = hInstance;
        // TkWinXInit(hInstance);
    } else if (reason == DLL_PROCESS_DETACH) {
        // TkWinXCleanup(hInstance);
    }
    return(TRUE);
}

/*
 * TkWin32DllPresent() can be referenced elsewhere to
 * force inclusion of this file and hence DLLMain()
 */

int
TkWin32DllPresent()
{
 return 1;
}

HINSTANCE
TclWinGetTclInstance()
{
    return tclInstance;
}

#endif /* WIN32 */

